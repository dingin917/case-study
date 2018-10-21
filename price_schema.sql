create table prices 
(   
    productid int unsigned not null auto_increment primary key,
    product char(30) not null,
    single_price float(6,2) not null,
    double_price float(6,2)
);

create table sales 
(   
    transactionid int unsigned not null auto_increment primary key,
    productid int unsigned not null, 
    produce_qty int unsigned not null,
    sales float(20,2) not null,
    transaction_date date not null
);