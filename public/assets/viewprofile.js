document.addEventListener('DOMContentLoaded', function () {
    var viewStudentModal = document.getElementById('viewStudentModal');
    viewStudentModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var studentId = button.getAttribute('data-student-id');

        // Make an AJAX request to fetch the student's data
        fetch('/student-show/' + studentId)
            .then(response => response.json())
            .then(data => {
                // Populate the modal with the fetched data
                document.getElementById('studentFirstName').textContent = data.firstName;
                document.getElementById('studentLastName').textContent = data.lastName;
                document.getElementById('studentAddress').textContent = data.address;
                document.getElementById('studentEmail').textContent = data.email;
                document.getElementById('studentMessage').textContent = data.message;
            });
    });
});

