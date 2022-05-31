<div>
    <div class="mob" style="border-bottom:1px solid grey;width:100%; height:40px">
        <a style="" onclick="history.back()"><i style="margin-left:15px;font-size:20px" class="fas fa-arrow-left"></i></a>
         Jeemjam
     
  </div>
  <div class="login">
      {{-- @if($errors)
      @foreach($errors->all() as $error)
      <p style="color:red;">{{$error}}</p>
      @endforeach
      @endif
      @if(Session::has('error'))
      <p style="color:red;">{{session('error')}}</p>
      @endif
      @if(Session::has('success'))
      <p style="color:red;">{{session('success')}}</p>
      @endif --}}
      <form  wire:submit.prevent="submit"   enctype="multipart/form-data">
          
             <table>
             <tr>
         <div class="img"> <img src="{{asset('1 (3).png')}}" alt="logo" id="logo"></div>
            </tr>
      
      
          <tr>
              <h1> <i>Add Post</i> </h1>
          </tr>
          <tr>
              <td> <label for="">Title</label>
              </td>
          </tr>  
          <tr>
              <td> <input type="text" wire:model='title' id="title" placeholder="Title">
                @error('title')
                <p style="color:red;font-size: 15px;">{{$message}}</p>
                @enderror
              </td>
          </tr>
          <tr>
              <td> <label for="">Author</label>
                
              </td>
          </tr>  
          <tr>
          @if(Session::has('userData'))
              <td> <input type="text" wire:model='author' id="Author" placeholder="Auther" value="{{session('userData')->name}}">
                @error('author')
                <p style="color:red;font-size: 15px;">{{$message}}</p>
                @enderror
            </td>
          @endif
          </tr>
          <tr>
              <td> <label for="">Country</label>
              </td>
          </tr>  
          <td><select wire:model='country' id="country">
            
            <option value=''>Choose a Country</option>
               <option value="UAE">UAE
                 </option>
             <option value="Algeria">
          Algeria
                </option>
                 <option value="Bahrain">Bahrain
                 </option>
                  <br>
                 <option value="Egypt">
                  Egypt</option>
                  <br>
                 <option value="Alexandria">Alexandria
                 </option>
                  <br>
                 <option value="Cairo">Cairo
                 </option>
                  <br>
                 <option value="Delta">Delta
                 </option>
                  <br>
                 <option value="Upper Egypt">Upper Egypt
                 </option>
                  <br>
                 <option value="Emirates">Emirates
                 </option>
                  <br>
                 <option value="Abu Dhabi">Abu Dhabi
                 </option>
                  <br>
                 <option value="Ajman Emirate">Ajman Emirate
                 </option>
                  <br>
                 <option value="Al Ain">Al Ain
                 </option>
                  <br>
                 <option value="Dubai Emirate">Dubai Emirate
                 </option>
                  <br>
                 <option value="Fujairah">Fujairah
                 </option>
                  <br>
                 <option value="Ras Al-Khaimah">Ras Al-Khaimah
                 </option>
                  <br>
                 <option value="Sharjah Emirate">Sharjah Emirate
                 </option>
                  <br>
                 <option value="Umm Al Quwain">Umm Al Quwain
                 </option>
                  <br>
                 <option value="Iraq">
                  Iraq</option> 
                  <br>
                 <option value="Baghdad">Baghdad
                 </option>
                  <br>
                 <option value="Basra Governorate">Basra Governorate
                 </option>
                  <br>
                 <option value="Jordan">
                 Jordan</option>
                  <br>
                 <option value="Amman">Amman
                 </option>
                  <br>
                 <option value="Aqaba">Aqaba
                 </option>
                  <br>
                 <option value="Irbid">Irbid
                 </option>
                  <br>
                 <option value="Zarqaa">Zarqaa
                 </option>
                  <br>
                 <option value="Kuwait">
           Kuwait</option> 
                  <br>
                 <option value="Al Jahra Governorate">Al Jahra Governorate</option> 
                  <br>
                 <option value="Kuwait City">Kuwait City</option>
                    
                  <br>
                 <option value="Tenth Region">Tenth Region
                 </option>
                  <br>
                 <option value="Lebanon">>Lebanon
                 </option>
                  <br>
                 <option value="Morocco">Morocco
                 </option>
                  <br>
                 <option value="Oman">Oman
                 </option>
                  <br>
                 <option value="Qatar">Qatar<option>  
                  <br>
                 <option value="Saudi Arabia">Saudi Arabia
                 </option>
                  <br>
                 <option value="Al Ahsa">Al Ahsa
                 </option>
                  <br>
                 <option value="Al Qassim">Al Qassim
                 </option>
                  <br>
                 <option value="Aseer Province">Aseer Province
                 </option>
                  <br>
                 <option value="Dammam">Dammam
                 </option>
                  <br>
                 <option value="Hail Province">Hail Province
                 </option>
                  <br>
                 <option value="Jeddah">Jeddah
                 </option>
                  <br>
                 <option value="Medina">Medina
                 </option>
                  <br>
                 <option value="Riyadh">Riyadh
                 </option>
                  <br>
                 <option value="Tabuk">Tabuk
                 </option>
                  <br>
                <option value="Pakistan">Pakistan</option>
              
              </select>
              @error('country')
            <p style="color:red;font-size: 15px;">{{$message}}</p>
            @enderror
              </td>
          </tr>
          <tr>
            <td> <label for="">Category</label>
            </td>
        </tr>
        <tr>
            <td> <select  wire:model='selectedCategory'>
               
                <option value=''>Choose a Category</option>
                @foreach ($categories as $category)
                <option value="{{$category}}">{{$category}}</option>
                @endforeach
               
                
            </select>
            @error('selectedCategory')
            <p style="color:red;font-size: 15px;">{{$message}}</p>
            @enderror
            </td>
        </tr>
          <tr>
              <td> <label for="">Sub Category</label>
              </td>
          </tr>
          <tr>
              <td> <select wire:model='selectedSubCategory'>
               
                <option value=''>Choose a Sub Category</option>
                  @foreach ($subCategories as $subCategory)
                  <option value="{{$subCategory->sub_category}}">{{$subCategory->sub_category}}</option>
                  @endforeach
                 
                  
              </select>
              @error('selectedSubCategory')
              <p style="color:red;font-size: 15px;">{{$message}}</p>
              @enderror
              </td>
          </tr>
          <tr>
              <td> <label for="">Main Image</label>
              </td>
          </tr>  
          <tr>
              <td> <input type="file"  wire:model='mainImage'>
                @error('mainImage')
                <p style="color:red;font-size: 15px;">{{$message}}</p>
                @enderror
              </td>
          </tr>
          <tr>
              <td> <label for="">Image2</label>
              </td>
          </tr>  
          <tr>
              <td> <input type="file" wire:model='mainImage2' id="img" placeholder="Title">
              </td>
          </tr>
          <tr>
              <td> <label for="">Image3</label>
              </td>
          </tr>  
          <tr>
              <td> <input type="file" wire:model='mainImage3' id="img" placeholder="Title">
              </td>
          </tr>
          <tr>
              <td> <label for="">Image4</label>
              </td>
          </tr>  
          <tr>
              <td> <input type="file" wire:model='mainImage4' id="img" placeholder="Title">
              </td>
          </tr>
          <tr>
              <td> <label for="">Image5</label>
              </td>
          </tr>  
          <tr>
              <td> <input type="file" wire:model='mainImage5' id="img" placeholder="Title">
              </td>
          </tr>
          <tr>
              <td> <label for="">Phone-no</label>
              </td>
          </tr>
           <tr>
              <td> <input type="number" wire:model='phone' id="title" placeholder="Phone-no">
                @error('phone')
                <p style="color:red;font-size: 15px;">{{$message}}</p>
                @enderror
              </td>
          </tr>
           <tr>
              <td> <label for="">Whatsapp-no</label>
              </td>
          </tr>
           <tr>
              <td> <input type="number" wire:model='whatsapp' id="title" placeholder="Whatsapp number">
                @error('whatsapp')
                <p style="color:red;font-size: 15px;">{{$message}}</p>
                @enderror
              </td>
          </tr>
           <tr>
              <td> <label for="">Content</label>
              </td>
          </tr>
          <tr>
              <td> <textarea wire:model='content' id="content" cols="50" rows="20"  maxlength="2500"></textarea>
                @error('content')
                <p style="color:red;font-size: 15px;">{{$message}}</p>
                @enderror
              </td>
          </tr>
          <tr>
              <td>
                  
              </td>
          </tr>
  </table>
  <button type="submit">Submit</button>
</form>
</div>
</div>
