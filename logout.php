<?php require_once('connect.php'); ?>
<?php session_start(); ?>
<?php unset($_SESSION['user']); ?>
<?php header("location: index.php"); ?>