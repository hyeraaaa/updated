<!-- Modal -->
<div class="modal fade" id="tagsModal" tabindex="-1" aria-labelledby="tagsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tagsModalLabel">
                    <i class="bi bi-tags-fill me-2"></i>Select Tags
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Year Levels -->
                <div class="filter-section">
                    <h6 class="filter-title">
                        <i class="bi bi-mortarboard me-2"></i>Year Levels
                    </h6>
                    <div class="filter-options">
                        <?php foreach ($year_levels as $year_level): ?>
                            <label class="filter-chip" title="<?php echo htmlspecialchars($year_level['year_level']); ?>">
                                <input type="checkbox"
                                    name="year_level[]"
                                    value="<?php echo $year_level['year_level_id']; ?>"
                                    <?php if (in_array($year_level['year_level_id'], explode(',', $announcement['selected_year_levels']))) echo 'checked'; ?>>
                                <span><?php echo htmlspecialchars($year_level['year_level']); ?></span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Departments -->
                <div class="filter-section">
                    <h6 class="filter-title">
                        <i class="bi bi-building me-2"></i>Departments
                    </h6>
                    <div class="filter-options">
                        <?php foreach ($departments as $department): ?>
                            <label class="filter-chip" title="<?php echo htmlspecialchars($department['department_name']); ?>">
                                <input type="checkbox"
                                    name="department[]"
                                    value="<?php echo $department['department_id']; ?>"
                                    <?php if (in_array($department['department_id'], explode(',', $announcement['selected_departments']))) echo 'checked'; ?>>
                                <span><?php echo htmlspecialchars($department['department_name']); ?></span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Courses -->
                <div class="filter-section">
                    <h6 class="filter-title">
                        <i class="bi bi-book me-2"></i>Courses
                    </h6>
                    <div class="filter-options">
                        <?php foreach ($courses as $course): ?>
                            <label class="filter-chip" title="<?php echo htmlspecialchars($course['course_name']); ?>">
                                <input type="checkbox"
                                    name="course[]"
                                    value="<?php echo $course['course_id']; ?>"
                                    <?php if (in_array($course['course_id'], explode(',', $announcement['selected_courses']))) echo 'checked'; ?>>
                                <span><?php echo htmlspecialchars($course['course_name']); ?></span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x me-2"></i>Close
                </button>
            </div>
        </div>
    </div>
</div>