<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;
use URL;


class AnswersController extends Controller
{
    public function check (Request $request){
        /**
         * Was bringt dir das? du speicherst ja nicht die vom User eingegebene Antwort ab,
         * sondern die korrekte Antwort, wenn ich das richtig verstehe. Du musst also die Antwort,
         * die der User über das $request Objekt übermittelt hat, in dieser Funktion vergleichen.
         */
        // $user_answer = DB::table('levels')->find(3);

        //$answer = Answers::all(); // hier holst du alle Antworten aus der Datenbank, du willst aber nur eine holen, so wie ich das verstehe

        /**
         * Referrer URL auslesen
         */
        $referrer = URL::previous();
        $gameParticlePosition = strpos($referrer, '/game');
        $gameParticle = substr($referrer, $gameParticlePosition); // should be /game, /game2 etc.
        if ($gameParticle === '/game') {
            $gameParticle = '/game1');
        }

        $gameNumber = ltrim($gameParticle, '/game');

        $level = Levels::find($gameNumber);
        /**
         * zu diesem Zeitpunkt hast du die korrekte Antwort aus der Datenbank geladen und
         * kannst nun die Antworten, die der User über das Formular abgeschickt hat, damit vergleichen.
         * ACHTUNG: kein Input in deinem HTML Formular in game.blade.php hat ein `name` Attribut. Damit
         * tust du dir sehr schwer die eingegebenen Antworten auszulesen.
         */
        $answer = $level->answer;

        /**
         * An dieser Stelle muss dynamisch geprüft werden, ob die einzelnen, vom User eingegebenen
         * Antworten, mit den korrekten Antworten aus der Datenbank übereinstimmen. Optimal wäre, wenn
         * diese Prüfung so dynamisch funktioniert, dass du mit dieser `AnswerController->check()`
         * Methode alle Levels überprüfen kannst.
         * Sind alle Antworten richtig, dann leiten wir nehme ich an zur Level Übersicht oder zum nächsten
         * Level weiter. Sind die Antworten nicht richtig, dann leiten wir zum Level zurück.
         */

        return Redirect::to('/game' . $gameNumber) // <-- wenn wir aktuell das game 1 validieren, dann leiten wir jetzt wieder genau auf /game1 zurück
                ->with('error','answer Wrong');
        }
}
