

var timer_search_users = ''
function search_users(){
  clearTimeout(timer_search_users)
  timer_search_users = setTimeout(async function(){ 
    const frm = document.querySelector("#frm_search")
    const conn = await fetch("/api/api-search-employees.php", {
      method : "POST",
      body : new FormData(frm)
    })
    const data = await conn.json()
    document.querySelector("#query_results").innerHTML = ""
    
    data.forEach(user => {
      let div_user = `
        <div class="grid grid-cols-[100fr,100fr,50fr] p-2">
          <div class="">${user.user_name}</div>
          <div class="">${user.user_last_name}</div>
          <div class="">${user.employee_salary}</div>
        </div>
      `
      document.querySelector("#query_results").insertAdjacentHTML('afterbegin', div_user)
    })    
   }, 500)

}













