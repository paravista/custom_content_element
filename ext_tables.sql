#
# Table structure for table 'tx_contact'
#
CREATE TABLE tx_contact (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
    image tinyblob,

	PRIMARY KEY (uid),
	KEY parent (pid)

);