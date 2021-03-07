<div>
Name:<br>
    <input type="text" class="p-2 bprder-gray-300 shadow rounded" wire:model.debounce.500ms="name">

    <p>Message:</p>
    <textarea wire:model="message"></textarea>

    <p>Marital Status:</p>
    Single:<input type="radio" value="single" wire:model.debounce.500ms="marital_status">
    Married:<input type="radio" value="married" wire:model.debounce.500ms="marital_status">

    <p>Favourite Color</p>
    Red: <input type="checkbox" value="red" wire:model.debounce.500ms="colors"><br>
    Green: <input type="checkbox" value="green" wire:model.debounce.500ms="colors"><br>
    Blue: <input type="checkbox" value="blue" wire:model.debounce.500ms="colors">

    <p>Favourite Fruites</p>
    <select wire:model.debounce.500ms="fruit">
        <option value="">Select Fruit</option>
        <option value="apple">Apple</option>
        <option value="mango">Mango</option>
        <option value="orange">Orange</option>
    </select><br>

   Name: {{$name}}<br>
   Message: {{$message}}<br>
   Marital Status: {{$marital_status}}<br>
   Favourit Colors: 
   @foreach($colors as $color)
   {{$color}}<br>
   @endforeach
   Favourit Fruit:{{$fruit}}
</div>
