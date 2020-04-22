@extends('layouts.MasterLayout.NavLayout')
@section('title','Show Report')
@section('content')
<h2>
  <br/>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Year</th>
        <th scope="col">Course ID</th>
        <th scope="col">Course Title</th>
        <th scope="col">Enrollment</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $i = 0;
        $totalEnrollment = 0;
        $courseCounter = 0;
        foreach($courses as $course){
          echo "<tr>";
          echo "<td>" . $course['semester_and_year'] . "</td><td>" . $course['code'] . "</td><td>" . $course['title'] . "</td><td>" . $course['enrollment'] . "</td>";
          echo "</tr>";

          $totalEnrollment += $course['enrollment'];
          $courseCounter++;
          $i++;
        }
        $averageEnrollment = $totalEnrollment / $courseCounter;

        echo "Average: $averageEnrollment";
      ?>
    </tbody>
  </table>
</h2>
<br />


@endsection
