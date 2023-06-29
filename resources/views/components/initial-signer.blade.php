<?php
$signers = [
    "Anna-Béatrice Schmaltz" => "Präsidentin Grüne Stadt Zürich, Gemeinderätin",
    "Moritz Bögli" => "Gemeinderat AL",
    "Martin Busekros" => "Gemeinderat Grüne",
    "Nicola Siegrist" => "Kantonsrat SP"
]
?>
<div class="cpt-initial-signers">
    <p><b>Mit freundlichen Grüssen,</b></p>
    @foreach ($signers as $name => $position)
        <span><b>{{$name}}</b> ({{$position}})</span>
        @if (!$loop->last)
            <br>
        @endif
    @endforeach
</div>
