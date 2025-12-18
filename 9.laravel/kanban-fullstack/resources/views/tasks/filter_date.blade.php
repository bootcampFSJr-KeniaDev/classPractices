@extends('home')

@section('content-home')
<style>
    .tasks-list-container {
    max-width: 700px;
    margin: 0 auto;
}
.tasks-list {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 1px 4px rgba(0,0,0,0.03);
    padding: 0;
    margin-top: 16px;
    border-collapse: separate;
    width: 100%;
}
.tasks-list-header {
    font-weight: 600;
    font-size: 1.1rem;
    padding: 20px 28px 12px 28px;
    color: #222;
}
.task-row {
    display: flex;
    align-items: center;
    padding: 18px 28px;
    border-bottom: 1px solid #f1f1f1;
    gap: 18px;
}
.task-row:last-child {
    border-bottom: none;
}
.task-icon {
    font-size: 1.5rem;
    color: #2563eb;
    background: #e7f0ff;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.task-info {
    flex: 1;
}
.task-title {
    font-weight: 500;
    color: #222;
    margin-bottom: 2px;
}
.task-date {
    color: #6b7280;
    font-size: 0.97rem;
}
.task-status {
    font-size: 0.97rem;
    font-weight: 500;
    padding: 4px 14px;
    border-radius: 12px;
    background: #e7fbe7;
    color: #22a33b;
    margin-left: 12px;
}
.task-status.overdue {
    background: #ffeaea;
    color: #e23c3c;
}
</style>
    <section class="tasks-list-container">
        <h1 class="title">Filter Tasks by Due Date</h1>
        <h2 class="subtitle">Select a date range to view relevant tasks.</h2>

        <form method="POST" action="">
            <select class="form-select mb-1" name="due_date">
                <option value="all">All Tasks</option>
                <option value="today">Due Today</option>
                <option value="week">Due This Week</option>
                <option value="overdue">Overdue</option>
            </select>

            <input type="submit" class="btn btn-dark mt-0">
        </form>

        <section class="tasks-list my-5">
            <h3 class="tasks-list-header">Tasks</h3>
            <div class="task-row">
                <div class="task-icon">✔️</div>
                <div class="task-info">
                    <p class="task-title">Implement User Authentication</p>
                    <p class="task-date">Due: 2024-07-15</p>
                </div>
                <span class="task-status">Active</span>
            </div>
            <div class="task-row">
                <div class="task-icon">✔️</div>
                <div class="task-info">
                    <p class="task-title">Design Project Dashboard</p>
                    <p class="task-date">Due: 2024-06-20</p>
                </div>
                <span class="task-status overdue">Overdue</span>
            </div>
            <div class="task-row">
                <div class="task-icon">✔️</div>
                <div class="task-info">
                    <p class="task-title">Set up Database</p>
                    <p class="task-date">Due: 2024-07-22</p>
                </div>
                <span class="task-status">Active</span>
            </div>
            <div class="task-row">
                <div class="task-icon">✔️</div>
                <div class="task-info">
                    <p class="task-title">Create Task Model</p>
                    <p class="task-date">Due: 2024-06-10</p>
                </div>
                <span class="task-status overdue">Overdue</span>
            </div>
            <div class="task-row">
                <div class="task-icon">✔️</div>
                <div class="task-info">
                    <p class="task-title">Build Task Filtering</p>
                    <p class="task-date">Due: 2024-07-29</p>
                </div>
                <span class="task-status">Active</span>
            </div>
        </section>
    </section>
@endsection