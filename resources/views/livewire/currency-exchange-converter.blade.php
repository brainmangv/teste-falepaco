<div>
    <div class="currfrtxt">{{ $currFromTxt }}</div>
    <div class="currtotxt">{{ $currToTxt }}</div>
    <div class="footnote">Ultima atualização · <span id="cur_lastUpdateTIme">{{ $lastUpdate }}</span>
    </div>
    <div class="d-md-flex">
        <div class="exchangediv">
            <select name="from" id="from" class="exchangeselect" title="from">
                <option value="BRL">BRL</option>
                <option value="USD">USD</option>
                <option value="CAD">CAD</option>
            </select>
            <br>
            <input type="text" wire:model.live.debounce.500ms="fromCurrency" class="exchangeinput"
                data-input-type="numeric">
            {{ $fromValue }}
        </div>
        <div class="text-center">
            <x-swap-icon />
        </div>
        <div class="exchangediv">
            <select name="to" id="to" title="to" class="exchangeselect">
                <option value="BRL">BRL</option>
                <option value="USD">USD</option>
                <option value="CAD">CAD</option>
            </select>
            <br>
            <input type="text" wire:model="toCurrency" class="exchangeinput" readonly>
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:initialized', function() {
        console.log('onload');
        const inputNumeric = document.querySelectorAll('input[data-input-type="numeric"]');
        inputNumeric.forEach(function(input) {
            input.addEventListener('keydown', function(e) {
                const key = event.key;
                const keyCode = event.keyCode || event.which;
                // Allow numbers, comma, navigation keys, and delete keys
                if (key === "Backspace" || keyCode === 8 || key === "," || keyCode === 188 || key === "Enter" || keyCode === 13 || /[0-9]/.test(key)) {
                    return true;
                }
                e.preventDefault();
            });
        });
    });
</script>

