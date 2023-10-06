create table time_slot(
    time_slot_id int,
    time_day varchar(5),
    start_time int,
    end_time int 
);

insert into time_slot(time_slot_id,time_day,start_time,end_time) values(1,"Mon",1,2);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(2,"Mon",3,4);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(3,"Mon",6,8);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(4,"Mon",9,11);

insert into time_slot(time_slot_id,time_day,start_time,end_time) values(5,"Tue",1,2);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(6,"Tue",3,4);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(7,"Tue",6,8);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(8,"Tue",9,11);

insert into time_slot(time_slot_id,time_day,start_time,end_time) values(9,"Wed",1,2);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(10,"Wed",3,4);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(11,"Wed",6,8);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(12,"Wed",9,11);

insert into time_slot(time_slot_id,time_day,start_time,end_time) values(13,"Thu",1,2);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(14,"Thu",3,4);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(15,"Thu",6,8);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(16,"Thu",9,11);

insert into time_slot(time_slot_id,time_day,start_time,end_time) values(17,"Fri",1,2);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(18,"Fri",3,4);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(19,"Fri",6,8);
insert into time_slot(time_slot_id,time_day,start_time,end_time) values(20,"Fri",9,11);

select * from time_slot;