<?php

function stuProfile($id){
      include('config.php');
      $sql="SELECT * FROM  student_tbl WHERE id=$id";
      $data=mysqli_query($conn,$sql); 
      return $data;
      //$data = mysqli_fetch_array($data);
      //return $data;

}

function viewmarkshet($id){
      include('config.php');
      $sql="SELECT * FROM  subject_details JOIN student_marks ON subject_details.id = student_marks.subject_id WHERE student_marks.student_id =$id";
      $data=mysqli_query($conn,$sql); 
      return $data;
}


function admin_detail($id){
      include('config.php');
      $sql="SELECT * FROM  admin WHERE id=$id";
      $data=mysqli_query($conn,$sql); 
      return $data;
}

function stuResult(){
      include('config.php');
      $sql="SELECT *, round((sum(marks)*100/600),2) as percent FROM student_tbl JOIN student_marks ON student_tbl.id = student_marks.student_id group by student_tbl.id ORDER BY percent DESC";
      $data=mysqli_query($conn,$sql);
      return $data;
}

function stuFees(){
      include('config.php');
      $sql="SELECT *, sum(fess_amount) as fees_total, (12000-sum(fess_amount)) as due_fees, max(month) as last_month FROM student_tbl LEFT JOIN student_fees_details ON student_tbl.id = student_fees_details.student_id group by student_tbl.id ORDER BY fees_total ASC";
      $data=mysqli_query($conn,$sql);
      return $data; 
}

function stuDetails(){
      include('config.php');
      $sql="SELECT *, sum(fess_amount) as fees_total FROM  student_tbl LEFT JOIN student_fees_details ON student_tbl.id=student_fees_details.student_id group by student_tbl.id ORDER BY fees_total DESC";
      $data=mysqli_query($conn,$sql); 
      return $data; 
}
?>