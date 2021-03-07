<div>
   Title: <input type="text" wire:model="title"><br>
   Name: <input type="text" wire:model="name"><br>

   <h3>Title: {{$title}}</h3>
   <h3>Name: {{$name}}</h3>

   @foreach($infos as $info)
    <h3>{{$info}}</h3>
   @endforeach
</div>
