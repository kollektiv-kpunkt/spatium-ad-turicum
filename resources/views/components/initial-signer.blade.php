<?php
$signers = [
    "Hannah Pfalzgraf" => "Co-Präsidentin GBKZ",
    "Serge Gnos" => "Co-Geschäftsleiter Unia Zürich-Schaffhausen",
    "Adriana Santos" => "Reinigungsangestellte",
    "Susanna Bosshard" => "Zeitungsverträgerin",
    "Montserrat Puertas" => "Reinigungsangestellte",
    "Angela Siciliano" => "Hilfsköchin",
    "Francisca Castro" => "Reinigungsangestellte",
    "Maria Filomena da Cruz" => "Raumpflegerin",
    "Carmela Simonato" => "Platzanweiserin",
    "Gabrielly Sirino" => "Reinigungsangestellte",
    "Isabel Vargas" => "Reinigungsangestellte"
]
?>
<div class="cpt-initial-signers">
    @foreach ($signers as $name => $position)
        <span><b>{{$name}}</b> ({{$position}})</span>
        @if (!$loop->last)
            <br>
        @endif
    @endforeach
</div>
