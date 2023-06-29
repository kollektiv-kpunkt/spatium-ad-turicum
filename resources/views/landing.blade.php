<?php
$parser = new Illuminate\Support\Str;
?>
<x-app-layout :title="__('sat.site.masthead')">
    <div class="sat-container sat-container__md">
        <img src="/images/header.jpg" alt="">
        @if (request()->session()->get('success') === true)
            <div class="sat-page-heroine__alert--success bg-green-200 border-green-700 border text-green-700 font-bold p-4 mb-6 sticky top-0 z-50">
                <p>{{__("sat.form.successmessage")}}</p>
            </div>
        @endif
        @if($errors->any())
        <div class="sat-page-heroine__alert--error bg-red-200 border-red-700 border text-red-700 font-bold p-4 mb-6 sticky top-0 z-50">
            <p>{{__("sat.form.errormessage")}}</p>
        </div>
        @endif
        <div class="sat-card my-12">
            <h2 class="text-2xl md:text-3xl font-black uppercase !leading-none mb-4">Wir brauchen Platz, lieber Stadtrat!</h2>
            <p class="mb-4">Die Stadtbevölkerung wächst, der Platz für sie aber nicht genug schnell. Und mitten drin lassen Liegenschafteigentümer*innen ihre Gebäude brach stehen und räumen alle kreativen Nutzungen mit irrsinnigen Ausreden. <b>Das darf nicht sein!</b> Unterzeichne unseren Brief und fordere mit uns den Stadtrat dazu auf, sich um diesen Misstand zu kümmern!</p>
            <x-form />
        </div>
        <div class="sat-addressants flex gap-x-12 gap-y-3 flex-wrap mb-8">
            <div class="sat-addressant w-full">
                <p class="text-xs">Petition an die Mitglieder des Stadtrates, namentlich an</p>
            </div>
            <div class="sat-addressant md:w-fit w-full">
                <p class="text-xs">die Vorsteherin des Tiefbau- und Entsorgungsdepartements</p>
                <p class="mt-1"><b>Simone Brander</b></p>
            </div>
            <div class="sat-addressant md:w-fit w-full">
                <p class="text-xs">den Vorsteher des Hochbaudepartements</p>
                <p class="mt-1"><b>André Odermatt</b></p>
            </div>
        </div>
        <div class="sat-letter mb-8">
            @php
                $letter = file_get_contents(resource_path('markdown/letter.md'));
                echo $parser->markdown($letter);
            @endphp
        </div>
        {{-- <x-initial-signer /> --}}
        @if (supporterCount() > 10)
            <div class="sat-all-signers mt-4 mb-12" x-data="{open: false}">
                <p class="underline cursor-pointer" x-on:click="open = ! open">und {{ number_format(supporterCount(),0,".","'" ) }} weitere Unterzeichnende</p>
                <div class="sat-signers-list mt-4" x-show="open">
                    @foreach (supporters() as $supporter)
                        <span class="cpt-signer">
                            @php
                                $firstnames = explode(" ", $supporter->data["fname"]);
                                $lastnames = explode(" ", $supporter->data["lname"]);
                                foreach ($firstnames as $key => $firstname) {
                                    $firstnames[$key] = ucfirst(strtolower($firstname));
                                }
                                foreach ($lastnames as $key => $lastname) {
                                    $lastnames[$key] = ucfirst(strtolower($lastname));
                                }
                                $formattedName = implode(" ", $firstnames) . " " . implode(" ", $lastnames);
                            @endphp
                            {{ $formattedName }}@if (!$loop->last),@endif
                        </span>
                    @endforeach
                </div>
            </div>
        @endif
        <x-social-share/>
    </div>
</x-app-layout>
