<?php
class Tournament {
    public function __construct()
    {
    }

    public function tally(string $results): string
    {
        $teamsStats = [];
        $output = [];
        $output[] = "Team                           | MP |  W |  D |  L |  P";

        // Si la chaîne est vide, retourner juste l'en-tête
        if (trim($results) === '') {
            return implode("\n", $output);
        }

        // Diviser la chaîne en lignes
        $lines = explode("\n", trim($results));

        // Parcourir chaque match
        foreach ($lines as $line) {
            if (trim($line) === '') continue; // Ignorer les lignes vides
            
            list($team1, $team2, $result) = explode(';', $line);

            // Initialiser les stats si l'équipe n'existe pas encore
            if (!isset($teamsStats[$team1])) {
                $teamsStats[$team1] = ['MP'=>0, 'W'=>0, 'D'=>0, 'L'=>0, 'P'=>0];
            }
            if (!isset($teamsStats[$team2])) {
                $teamsStats[$team2] = ['MP'=>0, 'W'=>0, 'D'=>0, 'L'=>0, 'P'=>0];
            }

            // Chaque équipe a joué un match
            $teamsStats[$team1]['MP']++;
            $teamsStats[$team2]['MP']++;

            // Mettre à jour les stats selon le résultat
            if ($result === 'win') {
                $teamsStats[$team1]['W']++;
                $teamsStats[$team1]['P'] += 3;
                $teamsStats[$team2]['L']++;
            } elseif ($result === 'loss') {
                $teamsStats[$team1]['L']++;
                $teamsStats[$team2]['W']++;
                $teamsStats[$team2]['P'] += 3;
            } elseif ($result === 'draw') {
                $teamsStats[$team1]['D']++;
                $teamsStats[$team1]['P']++;
                $teamsStats[$team2]['D']++;
                $teamsStats[$team2]['P']++;
            }
        }

        // Trier les équipes par points puis alphabétique
        uksort($teamsStats, function($a, $b) use ($teamsStats) {
            $pointsDiff = $teamsStats[$b]['P'] - $teamsStats[$a]['P'];
            if ($pointsDiff !== 0) return $pointsDiff;
            return strcmp($a, $b);
        });

        // Construire le tableau final
        foreach ($teamsStats as $team => $stats) {
            $output[] = sprintf(
                "%-30s | %2d | %2d | %2d | %2d | %2d",
                $team,
                $stats['MP'],
                $stats['W'],
                $stats['D'],
                $stats['L'],
                $stats['P']
            );
        }

        return implode("\n", $output);
    }
}
