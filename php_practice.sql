CREATE TABLE client_info (
    member_id int(6) not null AUTO_INCREMENT PRIMARY KEY ,
    first_name varchar(25) not null,
    last_name varchar(25) not null,
    phone_number varchar(10) not null,
    email varchar(25) not null UNIQUE,
    password varchar(15) not null,
    fitness_goals varchar(100),
    workout_schedule varchar(100),
    fitness_level TINYINT(2) CHECK(fitness_level BETWEEN 0 AND 10)
);
INSERT INTO client_info(first_name,last_name,phone_number,email,password, fitness_goals, workout_schedule, fitness_level) VALUES(
    'Lily','Akpanke','0768868942','lily123@gmail.com','lily123', 'become fit','Monday and Tuesday',7
);
INSERT INTO client_info(first_name,last_name,phone_number,email,password, fitness_goals, workout_schedule, fitness_level) VALUES(
    'Ajay','Rashid','0848659431','ajayR@gmail.com','ajay456', 'loose weight','Once a week',2
);

INSERT INTO client_info(first_name,last_name,phone_number,email,password, fitness_goals, workout_schedule, fitness_level) VALUES(
    'James','Miles','0621234567','milesJames@gmail.com','@MJ098', 'become tonned','Three times a week',5
);