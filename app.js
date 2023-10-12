
async function search_employees(){
  const frm = event.target.form
  const conn = await fetch("/api/api-search-employees.php", {
    method : "POST",
    body : new FormData(frm)
  })
  const data = await conn.json()
  console.log(data)
}













