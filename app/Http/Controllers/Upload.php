<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Storage;

/* 
    'name',
    'size',
    'file',
    'full_file',
    'mime_type',
    'file_type',
    'ralation_id'

    $request, $path, $upload_type='single', $delete_file=null, $new_name = null, $crud_type = []
 */
class Upload extends Controller
{
    public function upload($data = []) {
        if(in_array('new_name', $data)) {
            $new_name = $data['new_name'] === null ? times() : $data['new_name'];
        }
        
        if(request()->hasFile($data['file']) && $data['upload_type'] == 'single') {
            \Storage::has($data['delete_file'])?\Storage::delete($data['delete_file']):'';
            return request()->file($data['file'])->store($data['path']);
        } elseif (request()->hasFile($data['file']) && $data['upload_type'] == 'multiple') {
            
            $file = request()->file($data['file']);

            $size = $file->getSize();
            $mime_type = $file->getMimeType();
            $name = $file->getClientOriginalName();
            $hashname = $file->hashName();

            $file->store($data['path']);
            $add = File::create([
                'name' => $name,
                'size' => $size,
                'file' => $hashname,
                'full_file' => $data['path'].$hashname,
                'mime_type' => $mime_type,
                'file_type' => $data['file_type'],
                'ralation_id' => $data['relation_id']
            ]);

            return $data['path'] . $hashname;
        }
    }
}
