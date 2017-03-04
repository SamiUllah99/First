<?php
    /*
      ****THIS SHOULD ONLY BE ALLOWED TO GENERATE FEE WHEN ITS 1ST OF THE MONTH. DO IT PROGRAMMATICALLY.
      ab call kar k pochogy k kese hoga, yaar PHP date get karo server ki, and get tarekh and check
      if its == 1 or !
      **************************************************************************************************
      Fee Status 0 = Pending
      Fee Status 1 = Paid

      When fee is generated for a specific section,
      it generates the fee fields for all the students in the section.
      You have to pass an array with all the StudentID and a Variable with SectionID,
      and others mentioned below.
      e.g.

      (int) DueFee -> You will get the Fee for that Section from section class, and pass here.
      (int) SectionID
      (array) StudentIDs array.

      At this stage just the rows are created, and receipts can be printed.
      THIS IS NOT FEE PROCESSING.
    */
    class Fee{
        public $StudentID = "";
        public $StudentArray = "";
        public $SectionID = "";
        public $DueFee = "";
        public $Paid = "";
        public $Arrears = "";
        public $Status = "";
        public $PaidOn = "";


        function _CONSTRUCT(){}




    }
?>