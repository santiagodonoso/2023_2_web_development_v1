
async function search_employees(){
  const frm = event.target.form
  const conn = await fetch("/api/api-search-employees.php", {
    method : "POST",
    body : new FormData(frm)
  })
  const data = await conn.json()
  document.querySelector("#query_results").innerHTML = ""
  
  data.forEach(employee => {
    let div_employee = `
      <div class="grid grid-cols-[100fr,100fr,50fr] p-2">
        <div class="">${employee.user_name}</div>
        <div class="">${employee.user_last_name}</div>
        <div class="">${employee.employee_salary}</div>
      </div>
    `
    document.querySelector("#query_results").insertAdjacentHTML('afterbegin', div_employee)
  })
}













