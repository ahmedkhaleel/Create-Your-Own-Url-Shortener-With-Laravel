<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortRequest;
use App\Models\ShortUrl;
use Illuminate\Http\Request;


class ShortUrlController extends Controller
{
    public function short(ShortRequest $request)
    {
        if($request->original_url)
        {
            $new_url = ShortUrl::create([
                'user_id' => $request->user()->id,
                'original_url'=>$request->original_url,

                ]);
            if($new_url)
            {
                $short_url =  base_convert($new_url->id,10,36);
                $new_url->update(['short_url'=>$short_url]);
            }
            return redirect()->back()->with('success','your Url : <a href="'.url('/'.$short_url).'">'.url('/'.$short_url).'</a>');
        }
        return back();
    }

    public function show($code)
    {

        $short_url = ShortUrl::where('short_url',$code)->first();
        if($short_url)
        {
            $short_url->increment('visits');
            return redirect($short_url->original_url);
        }
        return redirect()->back()->with('error','Url not found');
    }
}
