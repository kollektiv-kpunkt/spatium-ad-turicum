<?php
$signers = [
    "Anna-Béatrice Schmaltz" => "Präsidentin Grüne Stadt Zürich, Gemeinderätin",
    "Moritz Bögli" => "Gemeinderat AL",
    "Nicola Siegrist" => "Kantonsrat SP"
]
?>
<div class="cpt-initial-signers">
    <b>Mit freundlichen Grüssen,</b><br>
    @foreach ($signers as $name => $position)
        <span><b>{{$name}}</b> ({{$position}})</span>
        @if (!$loop->last)
            <br>
        @endif
    @endforeach
</div>
