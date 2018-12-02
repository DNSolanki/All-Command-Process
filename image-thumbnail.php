<?php 
//Intervention Image package install
//command :- composer require intervention/image

//Remove public path (app/public) in storage path
//command :- php artisan storage:link

//Helper Function :-
if (!function_exists('storeAvatar')){

    function storeAvatar($file,  string $role, string $folderName, string $deleteFile = Null)
    {

        if ($file instanceof UploadedFile) {
            if ($deleteFile != '') {
                $d_file = 'public/'.$deleteFile;
                File::deleteDirectory(dirname($d_file));
            }
            
            $name = $file->getClientOriginalName();
            $unique_path = $folderName.'/'. $role. '/'. uniqid(). '/';
            $path = storage_path('app/public/'. $unique_path);
            File::makeDirectory($path, 0777, true, true);
            $thumbnailPath = $path.'/thumbnail/';
            File::makeDirectory($thumbnailPath, 0777, true, true);

            $image = Image::make($file);
            $image->save($path.$name);
            $image->resize(150,150);
            $image->save($thumbnailPath.$name);

            return 'storage/'. $unique_path.$name;
        }
    }


//Controller Function :-
 if(!empty($data['avatar']))
            {
                $deleteFile = '';
                if(!empty($id)){
                    $getData = User::where('id', $id)->first(array('avatar'));
                    $deleteFile = $getData->avatar;
                }
                $data['avatar'] = storeAvatar(@$data['avatar'],'user','avatars', $deleteFile);
            }

//Laravel Store Function :-
if ($request->hasFile('pricing_file')) {
			$data['pricing_file'] = 'storage/'.$data['pricing_file']->store('pricing', 'public');
		}

