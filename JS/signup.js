const validator = new JustValidate('#form', {
  validateBeforeSubmitting: true,
});

      validator.addField('#fname', [
          {
          rule: 'required',
          },
          {
          rule: 'minLength',
          value:3,
          },
]);
validator.addField('#lname', [
  {
  rule: 'required',
  },
  {
  rule: 'minLength',
  value:3,
  },
]);
validator.addField('#email', [
{
rule: 'required',
},
{
rule: 'email',
},
]);
validator.addField('#phone', [
{
rule: 'required',
},
{
rule: 'number',
},
]);
validator.addField('#pswd', [
{
rule: 'required',
},
{
rule: 'password',
},
]);
validator.onSuccess((event) => {
  document.getElementById("form").submit();
});