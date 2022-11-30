<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use App\NewsImage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->type == 'datatable') {
            $data = News::orderBy('created_at', 'desc');
            return datatables()->of($data)
                ->editColumn('date', function ($data) {
                    return date('d M Y', strtotime($data->date));
                })
                ->addColumn('status', function ($data) {
                    $status = '';
                    if($data->status == 'PENDING'){
                        $status = '<div> <span style="padding:5px;border-radius:10px;background-color: #9a9a9a;color: #fff;border: 2px solid #9a9a9a;box-shadow: 0px 3px 5px 0px rgb(0 0 0 / 8%);" class="badge status-success">MENUNGGU</span> </div>';
                    } elseif($data->status == 'ACCEPTED'){
                        $status = '<div> <span style="padding:5px;border-radius:10px;background-color: #f78c22;color: #fff;border: 2px solid #f78c22;box-shadow: 0px 3px 5px 0px rgb(0 0 0 / 8%);" class="badge status-danger">TERIMA</span> </div>';
                    }
                    elseif($data->status == 'REJECT'){
                        $status = '<div> <span style="padding:5px;border-radius:10px;background-color: #ff3d60;color: #fff;border: 2px solid #ff3d60;box-shadow: 0px 3px 5px 0px rgb(0 0 0 / 8%);" class="badge status-danger">TOLAK</span> </div>';
                    }
                    return $status;
                })
                ->addColumn('action', function ($data) {
                    $action = '';

                    // $action .= '<a href="' . route('village-apparature.show', $data->id) . '" class="me-3 text-warning" data-bs-toggle="tooltip" data-placement="top" title="Detail"><i class="mdi mdi-file-document font-size-18"></i></a>';

                    $action .= '<a href="' . route('news.edit', $data->id) . '" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>';

                    $action .= '<a href="' . route('news.show', $data->id) . '" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Show"><i class="mdi mdi-eye font-size-18"></i></a>';

                    $action .= '<a class="text-danger delete-item" data-label="Customer" data-url="news/' . $data->id . '" data-id="' . $data->id . '" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>';

                    return $action;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        } else {
            return view('admin.news.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = News::all();
        if(!empty($news->id)){
            $listImage = NewsImage::where('new_id', $news->id)->get();
        }else{
            $listImage = null;
        }
        return view('admin.news.form',[
            'listImage' => $listImage
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'unique' => ':attribute sudah digunakan!'
        ], [
            'title' => 'judul',
            'description' => 'deskripsi',
        ]);

        try {
            // dd($request->list_images);
            // if (!empty($request->file('photo'))) {
            //     $file = $request->file('photo');

            //     $photo = time() . "-" . $file->getClientOriginalName();

            //     $path = $request->file('photo')->storeAs('public/upload/news/', $photo);
            // }
            $news = News::create([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'description' => $request->description,
                'date' => Carbon::now(),
                'status' => 'PENDING',
            ]);

            if ($request->list_images) {
                foreach ($request->list_images as $index => $item) {
                    $product_image = [
                        'new_id' => $news->id,
                        'photo' => $item['url'],
                        'set_front' => $index == 0 ? '1' : '0'
                    ];
                    NewsImage::create($product_image);
                }
            } else {
                $product_image = [
                    'new_id' => $news->id,
                    'photo' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAADCCAMAAAB6zFdcAAAAQlBMVEX///+hoaGenp6ampr39/fHx8fOzs7j4+P8/Pyvr6/d3d3FxcX29va6urqYmJjs7OzU1NSlpaW1tbWtra3n5+e/v78TS0zBAAACkUlEQVR4nO3b63KCMBCGYUwUUVEO6v3fagWVY4LYZMbZnff51xaZ5jON7CZNEgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABQb5tvI8qzX4/nH84XG5Upfj2ir2V2E5fZ/XpIX9saMnhkYLIkiyRJjdgMoiEDMmiQgfwM8rSu77ew2wnPoLTmwdZBs0J2BuXrYckcQm4nOoP+WcmWAbcTnUHZPy9eA24nOoN7n0HI54ToDM5k8PjluwyqgNuJzqDoaugPg8gWZ4noDAYLwuIg75fLeeHHsjNIzrZJwWwW+0DNsmEWPjiEZ5AcD8ZUu8VZ8HyQMifvBdIz+PS33i8adu+7Qn4Gn1Tdupl7rlCfQb9seosK7RkcBy1o30iVZ5CPOtDW3WhQnsF13IV3v0p3BqfJRoSpXVepzmA/24+yqeMyzRm4tqOs44lSUwa3yfgOri25av5CPRnklR33VlPnrqSZV09qMsiqSWV082xOz1uPajJ49pTM/f115k6guWa6JGjJ4N1lt8fXN2rv/vysjFaSQdFXBc/KKF04ptFPliclGVR9Bu27XCyeVOkmy5OODAZN9rYyyip/AIPJ8qIig+PoXbf7YdPdncFoSdCQQT4ZceV+MhiFMBy0hgyu0yGvOLI17KwpyGBaHK5jtt0N5GcwLw7XZdB31sRn8O+ziqYro8Vn4CwOV+k6a9Iz+PwRsKC7h+gMfMXhKu/OmuwM/MXhKq8yWnYG/uJw5Uxoy2jRGZTBZ/jboxuSM1guDtdNhKazJjiDbNMe0AxzKUVnkO+jEJxBxNtJzWCTxlNLzSB8KehJ/H+mJGYAjaDjzj9SnHZRuXZiAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAECXP1XDHv7U4SNFAAAAAElFTkSuQmCC',
                    'setfront' => '1'
                ];
                NewsImage::create($product_image);
            }

            // foreach ($request->list_images as $key => $value) {
            //     $data_detail = [
            //         'new_id' => $news->id,
            //         'photo' => isset($value['url']) ? $value['url'] : null,
            //     ];
            //     NewsImage::create($data_detail);
            // }

            return redirect()->route('news.index')
                ->with('success', 'Berita berhasil dibuat');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = News::with(['images'])->where('id', $id)->first();
        // dd($data);
        return view('admin.news.detail', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = News::with(['images'])->where('id', $id)->first();
        if ($data == null) {
            abort(404);
        }
        // dd($data);
        return view('admin.news.form', [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->list_images);
        // $oldPhoto = News::where('id', $id)->orderBy('created_at', 'desc')->first();

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'unique' => ':attribute sudah digunakan!'
        ], [
            'title' => 'judul',
            'description' => 'deskripsi'
        ]);

        try {
            $formData = ([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'description' => $request->description,
                'status' => 'PENDING',
            ]);

            News::find($id)->update($formData);

            NewsImage::where('new_id', $id)->delete();
            if ($request->list_images && is_array($request->list_images)) {
                foreach ($request->list_images as $index => $item) {
                    // dd($index);
                    $product_image = [
                        'new_id' => $id,
                        'photo' => $item['url'],
                        'set_front' => $index == 0 ? '1' : '0'
                    ];
                    NewsImage::create($product_image);
                }
            }

            // foreach ($request->list_images as $key => $value) {
            //     $data_detail = [
            //         'new_id' => $id,
            //         'photo' => isset($value['url']) ? $value['url'] : null,
            //     ];
            //     NewsImage::where('id',$value['id'])->update($data_detail);
            // }

            return redirect()->route('news.index')
                ->with('success', 'Berita berhasil diubah');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        return response()->json([
            "message" => "Berita berhasil dihapus."
        ]);
    }

    public function accepted($id){
        try {
            $formData = ([
                'status' => 'ACCEPTED',
            ]);

            News::find($id)->update($formData);

            return redirect()->route('news.index')
                ->with('success', 'Berita berhasil diterima');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        }
    }

    public function reject($id){
        try {
            $formData = ([
                'status' => 'REJECT',
            ]);

            News::find($id)->update($formData);

            return redirect()->route('news.index')
                ->with('success', 'Berita berhasil diterima');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        }
    }
}
