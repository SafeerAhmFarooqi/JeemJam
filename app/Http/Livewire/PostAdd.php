<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\post;
use Illuminate\Support\Facades\Session;

use App\Models\category;

class PostAdd extends Component
{
    use WithFileUploads;

    public $selectedCategory;
    public $selectedSubCategory;
    public $title;
    public $author;
    public $country;
    public $mainImage;
    public $mainImage2;
    public $mainImage3;
    public $mainImage4;
    public $mainImage5;
    public $phone;
    public $whatsapp;
    public $content;
    

    protected $rules = [
        'selectedCategory' => 'required',
        'selectedSubCategory' => 'required',
        'title' => 'required',
        'author' => 'required',
        'country' => 'required',
        'mainImage' => 'required',
        'phone' => 'required',
        'whatsapp' => 'required', // 15MB Max
    ];

    public function submit()
    {
        $this->validate();

        $mainImage='';
        $mainImage2='';
        $mainImage3='';
        $mainImage4='';
        $mainImage5='';
        if($this->mainImage)
        {
            $this->mainImage->store('img','asset');
            $mainImage=$this->mainImage->hashName();
        }

        if($this->mainImage2)
        {
            $this->mainImage2->store('img','asset');
            $mainImage2=$this->mainImage2->hashName();
        }

        if($this->mainImage3)
        {
            $this->mainImage3->store('img','asset');
            $mainImage3=$this->mainImage3->hashName();
        }

        if($this->mainImage4)
        {
            $this->mainImage4->store('img','asset');
            $mainImage4=$this->mainImage4->hashName();
        }

        if($this->mainImage5)
        {
            $this->mainImage5->store('img','asset');
            $mainImage5=$this->mainImage5->hashName();
        }

        $post= new post;
        $post->title=$this->title;
        $post->phone=$this->phone;
        $post->whatsapp=$this->whatsapp;
        $post->country=$this->country;
        $post->author=$this->author;
        $post->category=$this->selectedCategory;
        $post->sub_category=$this->selectedSubCategory;
        $post->content=$this->content;
        $post->img=$mainImage;
        $post->img2=$mainImage2;
        $post->img3=$mainImage3;
        $post->img4=$mainImage4;
        $post->img5=$mainImage5;
        $result=$post->save();
        if($result)
        {
            return redirect('/post/show')->with('success', 'Post Added Successfully' );
           // Session::flash('success', __('Post Added Successfully'));
        }
    }

    public function render()
    {
        //$categories=category::all();
        $save=true;
        $categoriesArray=[];
        $categories=category::all();
        foreach ($categories as $category) {
            foreach ($categoriesArray as $value) {
                if($value==$category->category)
                {
                    $save=false;   
                }
            }
            if($save)
            {
                $categoriesArray[]=$category->category;
                
            }
            $save=true;
        }
        $subCategories=category::where('category',$this->selectedCategory)->get();
        return view('livewire.post-add',[
            'categories'=>$categoriesArray,
            'subCategories'=>$subCategories,
        ]);
    }
}
