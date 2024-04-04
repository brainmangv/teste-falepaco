<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold fs-4 text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4 py-lg-12">
        <div class="container-lg mx-auto px-4 sm:px-6 lg:px-8">
                <div class="p-lg-6 text-gray-900">
                    <div class="currfrtxt">1,34 US Dollar =</div>
                    <div class="currtotxt">6,75 Brazilian Real</div>
                    <div class="footnote">Last updated · <span id="cur_lastUpdateTIme">3 de abril às 21:30 UTC</span>
                    </div>
                    <div class="d-md-flex">
                        <div class="exchangediv">
                            <select name="from" id="from" class="exchangeselect" title="from">
                                <option value="BRL">BRL</option>
                                <option value="USD">USD</option>
                                <option value="CAD">CAD</option>
                            </select>
                            <br>
                            <input type="text" name="value" id="value" class="exchangeinput">
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
                            <input type="text" name="value" id="value" class="exchangeinput">
                        </div>
                    </div>
                </div>
                <x-exchange-table />
        </div>
    </div>
</x-app-layout>
