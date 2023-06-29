<?php
$signers = [
    "Anna-Béatrice Schmaltz" => "Präsidentin Grüne Stadt Zürich, Gemeinderätin",
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
