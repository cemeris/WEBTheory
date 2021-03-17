CREATE TABLE media (
  media_id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  path_to_fail varchar(500)
);

CREATE TABLE questions (
  question_id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  question text,
  correct_answer varchar(255)
);

CREATE TABLE question_media (
  question_id int(11) NOT NULL,
  media_id int(11) NOT NULL
);

CREATE TABLE question_wrong_answer_relations (
  question_id int(11) NOT NULL,
  wrong_answer_id int(11) NOT NULL
);

CREATE TABLE wrong_answer (
  wrong_answer_id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  wrong_id int(11) NOT NULL
);