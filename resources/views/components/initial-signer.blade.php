<?php
$signers = [
    "Anna-Béatrice Schmaltz" => "Präsidentin Grüne Stadt Zürich, Gemeinderätin",
    "Moritz Bögli" => "Gemeinderat AL, Anwohner",
    "Nicola Siegrist" => "Kantonsrat SP, Anwohner"
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
