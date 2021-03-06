<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class student_batch_model extends CI_Model {

	public function getAllDetails() {
		return $this -> db -> get("student_batch") -> result();
	}

	public function getDetailsByStudent($studentId) {
		$this -> db -> where("studentId", $studentId);
		$this -> db -> join('batch', 'student_batch.batchId = batch.batchId');
		$this -> db -> join('course', 'course.courseCode = batch.courseCode');
		$this -> db -> join('user' , 'student_batch.studentId = user.userId');
		$this -> db -> from('student_batch');
		return $this -> db -> get() -> result();
	}

	public function getDetailsByStudentCourse($studentId, $courseCode) {
		$this -> db -> where("studentId", $studentId);
		$this -> db -> where("courseCode", $courseCode);
		$this -> db -> join('batch', 'student_batch.batchId = batch.batchId');
		$this -> db -> join('course', 'course.courseCode = batch.courseCode');
		$this -> db -> from('student_batch');
		return $this -> db -> get() -> result();
	}

	public function getDetailsByBatch($batchId) {
		$this -> db -> where("batchId", $batchId);
		$this -> db -> from('student_batch');
		return $this -> db -> get() -> result();
	}

	public function getBatchCount($batchId) {
		$this -> db -> where("batchId", $batchId);
		return $this -> db -> select('count(*) as c') -> get('student_batch') -> row_array();
	}
	public function addStudentbatch($data) {
		if (isset($data)) {
			return $this -> db -> insert('student_batch', $data);
		}
		return false;
	}

}
?>