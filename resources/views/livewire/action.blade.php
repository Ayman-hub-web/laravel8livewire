<div>
    <button type="button" wire:click="addTwoNumber(22, 33)">Sum</button>
    <br>
    <textarea wire:keydown.enter="displayMessage($event.target.value)"></textarea><br>
    <form wire:submit.prevent="getSum()">
        Num1: <input type="text" name="num1" wire:model="num1"><br>
        Num2: <input type="text" name="num2" wire:model="num2"><br>
        <button type="submit">Submit</button>
    </form>
    <br>
    Sum: {{$sum}} <br>
    Message: {{$message}}
</div>
