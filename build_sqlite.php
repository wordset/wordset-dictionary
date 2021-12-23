<?php

$data_path = __DIR__ . '/data';
$database_path = __DIR__ . '/dictionary.sqlite';

$pdo = new \PDO('sqlite:' . $database_path);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->exec("DELETE FROM words");
$pdo->exec("DELETE FROM meanings");

$word_sql = "INSERT INTO words (wordset_id, word) VALUES (:wordset_id, :word)";
$word_stmt = $pdo->prepare($word_sql);

$meaning_sql = "INSERT INTO meanings (id, wordset_id, definition, example, speech_part) VALUES (:id, :wordset_id, :definition, :example, :speech_part)";
$meaning_stmt = $pdo->prepare($meaning_sql);

foreach(glob("$data_path/*.json") as $letter){

	if ($letter == 'misc.json'){
		continue;
	}
	$words = json_decode(file_get_contents($letter));

	foreach($words as $word){
		$word_stmt->execute([
			'wordset_id' => $word->wordset_id,
			'word' => $word->word
		]);

		if (empty($word->meanings)){
			continue;
		}

		foreach($word->meanings as $meaning){
			$meaning_stmt->execute([
				'id' => $meaning->id,
				'wordset_id' => $word->wordset_id,
				'definition' => $meaning->def,
				'example' => $meaning->example ?? null,
				'speech_part' => $meaning->speech_part
			]);
		}
	}
}