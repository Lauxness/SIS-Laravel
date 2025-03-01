<div class="modal fade" id="triggerModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle"></h5>
                <button type="button" class="btn-close close" data-bs-dismiss="modal" id="closeModal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="" id="studentForm">
                    @csrf
                    <div class="form-floating mb-3" id="studentIdGroup">
                        <input type="num" class="form-control" name="id" id="studentId" placeholder="123">
                        <label for="studentId">ID</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="studentName" placeholder="Enter Name">
                        <label for="studentName">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="studentEmail" placeholder="Enter Name">
                        <label for="studentEmail">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Name">
                        <label for="studentEmail">Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="course" id="course" placeholder="Enter Name">
                        <label for="studentEmail">Course</label>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submitButton" style="width: 100%;"></button>
                </form>
            </div>
        </div>
    </div>
</div>