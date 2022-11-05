fetch('server.php').then((res) => res.json())
 .then(response => {
    console.log(response);
     let output = '';
    
      for (let i in response){
    
    output += `<tr>
    
        <td>${response[i].ID}</td>
        <td>${response[i].BookingID}</td>
        <td>${response[i].Name}</td>
        <td>${response[i].MobileNumber}</td>
        <td>${response[i].Email}</td>
        <td>${response[i].EventDate}</td>
        <td>${response[i].EventStartingtime}</td>
        <td>${response[i].EventEndingtime}</td>
        <td>${response[i].VenueAddress}</td>
        <td>${response[i].EventType}</td>
        <td>${response[i].BookingDate}</td>
        <td>${response[i].Remark}</td>
        <td>${response[i].Status}</td>
        <td>${response[i].UpdationDate}</td>

    
    </tr>`;
    
    }
    
    document.querySelector('.tbody').innerHTML = output;
 }).catch(error => console.log(error));

 $(document).ready( function () {
   $('.table').DataTable();
} );