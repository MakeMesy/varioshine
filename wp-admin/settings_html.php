<section class="settings-section" id="settings_nav">
    <h2 class="section-title uppercase">Settings</h2>

    <form class="settings-form" method="post" action="./index.php">
        <input type="hidden" value="settings" name="settings">

        <div class="flex gap-5 form-groups">
            <div class="form-group">
                <label for="instagram">Instagram</label>
                <input type="text" id="instagram" name="instagram" placeholder="Enter Instagram link" value="<?= safe_htmlspecialchars($settings['instagram']) ?>" />
            </div>
            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" id="facebook" name="facebook" placeholder="Enter Facebook link" value="<?= safe_htmlspecialchars($settings['facebook']) ?>" />
            </div>
            <div class="form-group">
                <label for="amazon">Amazon</label>
                <input type="text" id="amazon" name="amazon" placeholder="Enter Amazon link" value="<?= safe_htmlspecialchars($settings['amazon']) ?>" />
            </div>
        </div>

        <div class="flex gap-5 form-groups">
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="Enter Phone number" value="<?= safe_htmlspecialchars($settings['phone']) ?>" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Email" value="<?= safe_htmlspecialchars($settings['email']) ?>" />
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" rows="3" placeholder="Enter Address"><?= safe_htmlspecialchars($settings['address']) ?></textarea>
            </div>
            <div>
                <button type="submit" class="update-btn">
                    <i class="fa-solid fa-rotate"></i> Update
                </button>
            </div>
        </div>
    </form>
</section>


<!-- style -->
<style>
    .settings-section {
        color: var(--text-color);
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 0 10px var(--light-primary);
        max-width: 1200px;
        margin: auto;
    }

    .section-title {
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        color: var(--primary-color);
        text-align: center;
        font-weight: bold;
    }

    .settings-form .form-group {
        margin-bottom: 1rem;
        display: flex;
        flex-direction: column;
    }

    .settings-form label {
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: var(--accent-color);
    }

    .settings-form input,
    .settings-form textarea {
        padding: 0.6rem;
        background: var(--light-primary);
        border: 1px solid var(--light-primary);
        color: var(--dark-primary);
        border-radius: 8px;

        width: 280px;
        outline: none;

        resize: none;
    }

    ::placeholder {
        color: var(--dark-primary);
    }

    .settings-form input:focus,
    .settings-form textarea:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 5px var(--accent-color);
    }

    .update-btn {
        background-color: var(--primary-color);
        color: var(--text-color);
        padding: 0.7rem 1.5rem;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-top: 1rem;
    }

    .update-btn:hover {
        background-color: var(--accent-color);
    }
</style>