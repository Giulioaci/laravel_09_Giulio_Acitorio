<x-layout>
<header>
    <div class="container-fluid header">
        <div class="row h-100">
          <div class="col-md-6 col-12">
            <h3 class ="text-white">{{$user['name']}} {{$user['surname']}}</h3>
            <h4 class ="text-white">{{$user['role']}}</h4>
          </div>
        </div>
    </div>
</header>
</x-layout>
