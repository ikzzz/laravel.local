<?php

namespace App\Http\Controllers\Admin;

use App\Resource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class ResourceController extends Controller
{
    public function resource()
    {
        $resource = resource::query()->paginate(10);

        return view('admin.resource')->with('resource', $resource);
    }


    public function create(Request $request)
    {

        if ($request->isMethod('post')) {

            $resource = new Resource;

            $data = $request->except('_token');
            $this->validate($request, Resource::rules(),[],Resource::attributesNames());
            $resource->fill($data)->save();
            return redirect()->route('admin.resource')->with('success', 'Ресурс добавлен успешно!');

        }

        $resource = new Resource;
        return view('admin.resourceCreate', [
            'resource' => $resource,
        ]);
    }

    public function update(Request $request, Resource $resource)
    {
        $data = $request->except('_token');
        $this->validate($request, Resource::rules(),[],Resource::attributesNames());
        $resource->fill($data)->save();
        return redirect()->route('admin.resource')->with('success', 'Ресурс изменён успешно!');
    }

    public function destroy(Resource $resource)
    {
        $resource->delete();
        return redirect()->route('admin.resource')->with('success', 'Ресурс удалён успешно!');
    }

    public function edit(Resource $resource)
    {
        return view('admin.resourceCreate', [
            'resource' => $resource,
        ]);
    }

    public function store(Resource $resource)
    {

    }
}
