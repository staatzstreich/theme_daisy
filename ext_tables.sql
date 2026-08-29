CREATE TABLE tt_content (
    tx_themedaisy_variant varchar(30) DEFAULT '' NOT NULL,
    tx_themedaisy_soft smallint(5) unsigned DEFAULT '0' NOT NULL,
    tx_themedaisy_size varchar(30) DEFAULT '' NOT NULL,
    tx_themedaisy_link varchar(1024) DEFAULT '' NOT NULL,
    tx_themedaisy_link_label varchar(255) DEFAULT '' NOT NULL,
    tx_themedaisy_countdown_value int(11) DEFAULT '0' NOT NULL,
    tx_themedaisy_countdown_label varchar(255) DEFAULT '' NOT NULL,
    tx_themedaisy_mockup_type varchar(30) DEFAULT '' NOT NULL,
    tx_themedaisy_mockup_url varchar(255) DEFAULT '' NOT NULL,
    tx_themedaisy_accordion_items int(11) unsigned DEFAULT '0' NOT NULL,
    tx_themedaisy_stat_items int(11) unsigned DEFAULT '0' NOT NULL,
    tx_themedaisy_timeline_items int(11) unsigned DEFAULT '0' NOT NULL,
    tx_themedaisy_step_items int(11) unsigned DEFAULT '0' NOT NULL,
    tx_themedaisy_tab_items int(11) unsigned DEFAULT '0' NOT NULL,
    tx_themedaisy_chat_items int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_themedaisy_accordion_item (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tt_content int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
    hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) unsigned DEFAULT '0' NOT NULL,
    l10n_source int(11) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_oid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_wsid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_state smallint(6) DEFAULT '0' NOT NULL,
    t3ver_stage int(11) DEFAULT '0' NOT NULL,

    question varchar(255) DEFAULT '' NOT NULL,
    answer text,

    PRIMARY KEY (uid)
);

CREATE TABLE tx_themedaisy_stat_item (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tt_content int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
    hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) unsigned DEFAULT '0' NOT NULL,
    l10n_source int(11) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_oid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_wsid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_state smallint(6) DEFAULT '0' NOT NULL,
    t3ver_stage int(11) DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    value varchar(255) DEFAULT '' NOT NULL,
    description varchar(255) DEFAULT '' NOT NULL,

    PRIMARY KEY (uid)
);

CREATE TABLE tx_themedaisy_timeline_item (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tt_content int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
    hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) unsigned DEFAULT '0' NOT NULL,
    l10n_source int(11) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_oid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_wsid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_state smallint(6) DEFAULT '0' NOT NULL,
    t3ver_stage int(11) DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    content text,
    side varchar(30) DEFAULT '' NOT NULL,

    PRIMARY KEY (uid)
);

CREATE TABLE tx_themedaisy_step_item (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tt_content int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
    hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) unsigned DEFAULT '0' NOT NULL,
    l10n_source int(11) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_oid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_wsid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_state smallint(6) DEFAULT '0' NOT NULL,
    t3ver_stage int(11) DEFAULT '0' NOT NULL,

    label varchar(255) DEFAULT '' NOT NULL,
    done smallint(5) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid)
);

CREATE TABLE tx_themedaisy_tab_item (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tt_content int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
    hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) unsigned DEFAULT '0' NOT NULL,
    l10n_source int(11) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_oid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_wsid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_state smallint(6) DEFAULT '0' NOT NULL,
    t3ver_stage int(11) DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    bodytext text,

    PRIMARY KEY (uid)
);

CREATE TABLE tx_themedaisy_chat_item (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tt_content int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
    hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) unsigned DEFAULT '0' NOT NULL,
    l10n_source int(11) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_oid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_wsid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_state smallint(6) DEFAULT '0' NOT NULL,
    t3ver_stage int(11) DEFAULT '0' NOT NULL,

    author varchar(255) DEFAULT '' NOT NULL,
    message text,
    side varchar(30) DEFAULT '' NOT NULL,
    time varchar(60) DEFAULT '' NOT NULL,

    PRIMARY KEY (uid)
);
