create database covid19_test;

use covid19_test;

create table patient_symptoms
(
current_sign varchar(50) PRIMARY KEY ,
step_fever_details DOUBLE ,
step_cough int(3),
step_smell int(3),
step_aches int(3),
step_diarrhea int(3),
step_tiredness int(3),
step_tiredness_details int(3),
step_feeding int(3),
step_breathlessness int(3),
step_age int(3),
step_height int(3),
step_weight int(3),
step_heart_disease int(3),
step_diabetes int(3),
step_cancer int(3),
step_breathing_disease int(3),
step_kidney_disease int(3),
step_liver_disease int(3),
step_pregnant int(3),
step_immunocompromised int(3),
step_immunosuppressant int(3),
step_postal_code int(5),
result int(3),
datet datetime DEFAULT CURRENT_TIMESTAMP
);
