CREATE TABLE IF NOT EXISTS "words" (
    "wordset_id" varchar(10) NOT NULL,
    "word" varchar(255)
    );

CREATE TABLE IF NOT EXISTS "meanings" (
    "id" varchar(10) NOT NULL,
    "wordset_id" varchar(10),
    "definition" text(128),
    "example" text(128),
    "speech_part" varchar(20)
    );

CREATE VIEW dictionary AS
SELECT words.wordset_id, words.word, meanings.id, meanings.definition, meanings.example, meanings.speech_part
FROM words JOIN meanings ON words.wordset_id = meanings.wordset_id;