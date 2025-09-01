<button type="button" onclick="redirectHotels()">Search Hotels</button>
 
<script>
function redirectHotels(){
  let location = document.getElementById("location").value;
  let checkin = document.getElementById("checkin").value;
  let checkout = document.getElementById("checkout").value;
 
  // ✅ Ab seedha aapke folder ke andar hotels.php khulega
  window.location.href = "/hostel.com/hotels.php?location="+encodeURIComponent(location)+"&checkin="+checkin+"&checkout="+checkout;
}
</script>
 
