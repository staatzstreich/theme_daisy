-- Migration: sitepackage (vendor/sitepackage) -> theme_daisy (michaelstaatz/theme-daisy)
-- Renames the tx_sitepackage_* columns and IRRE child tables to tx_themedaisy_*.
-- Run BEFORE activating theme_daisy, so TYPO3's schema comparison stays a no-op
-- (otherwise tx_themedaisy_* would be created empty and tx_sitepackage_* dropped
-- with data loss). Values survive verbatim.
--
-- SQLite dialect (tested with SQLite >= 3.25), executed via the sqlite3 CLI:
--   sqlite3 var/sqlite/<db>.sqlite < Build/Migrations/20260829-sitepackage-to-themedaisy.sql

-- tt_content columns (15 renames, values survive verbatim)
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_variant         TO tx_themedaisy_variant;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_soft            TO tx_themedaisy_soft;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_size            TO tx_themedaisy_size;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_link            TO tx_themedaisy_link;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_link_label      TO tx_themedaisy_link_label;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_countdown_value TO tx_themedaisy_countdown_value;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_countdown_label TO tx_themedaisy_countdown_label;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_mockup_type     TO tx_themedaisy_mockup_type;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_mockup_url      TO tx_themedaisy_mockup_url;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_accordion_items TO tx_themedaisy_accordion_items;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_stat_items      TO tx_themedaisy_stat_items;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_timeline_items  TO tx_themedaisy_timeline_items;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_step_items      TO tx_themedaisy_step_items;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_tab_items       TO tx_themedaisy_tab_items;
ALTER TABLE tt_content RENAME COLUMN tx_sitepackage_chat_items      TO tx_themedaisy_chat_items;

-- IRRE child tables (full table renames; the FK column is literally named
-- `tt_content`, so nothing to rename inside the tables)
ALTER TABLE tx_sitepackage_accordion_item RENAME TO tx_themedaisy_accordion_item;
ALTER TABLE tx_sitepackage_stat_item      RENAME TO tx_themedaisy_stat_item;
ALTER TABLE tx_sitepackage_timeline_item  RENAME TO tx_themedaisy_timeline_item;
ALTER TABLE tx_sitepackage_step_item      RENAME TO tx_themedaisy_step_item;
ALTER TABLE tx_sitepackage_tab_item       RENAME TO tx_themedaisy_tab_item;
ALTER TABLE tx_sitepackage_chat_item      RENAME TO tx_themedaisy_chat_item;