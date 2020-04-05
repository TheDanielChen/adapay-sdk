<?php
define("SDK_BASE", dirname(__FILE__));
define("ADAPAY_CORE", SDK_BASE."/../AdapayCore");
define("SDK_VERSION", "v1.1.0");
define("GATE_WAY_URL", "https://%s.adapay.tech");
define("DEBUG", true);
define("LOG", dirname(SDK_BASE)."/log/prod");
define("ENV", "prod");

include_once ADAPAY_CORE."/AdaPay.php";
include_once ADAPAY_CORE."/AdaLoader.php";

include_once SDK_BASE."/Payment.php";
include_once SDK_BASE."/Refund.php";
include_once SDK_BASE."/Member.php";
include_once SDK_BASE."/CropMember.php";
include_once SDK_BASE."/Tools.php";
include_once SDK_BASE."/SettleAccount.php";
include_once SDK_BASE."/Wallet.php";