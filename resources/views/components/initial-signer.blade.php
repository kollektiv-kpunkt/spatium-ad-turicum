<?php
$signers = [
    "Anna-Béatrice Schmaltz" => "Präsidentin Grüne Stadt Zürich, Gemeinderätin",
    "Moritz Bögli" => "Gemeinderat AL",
    "Lisa Diggelmann" => "Gemeinderätin SP",
    "Martin Busekros" => "Gemeinderat Grüne",
    "Nicola Siegrist" => "Kantonsrat SP",
    "Michel Makhlouf" => "Co-Präsident SP 10"
]
?>
<div class="cpt-initial-signers">
    <p><b>Mit freundlichen Grüssen,</b></p>
    <p>
    @foreach ($signers as $name => $position)
        <span><b>{{$name}}</b> ({{$position}})</span>
        @if (!$loop->last)
            <br>
        @endif
    @endforeach
    </p>
</div>
