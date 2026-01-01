<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <?php
    $stats = [
        ['label' => 'Applicant', 'value' => '128', 'color' => 'bg-blue-600', 'sub' => 'New Today'],
        ['label' => 'Process', 'value' => '45', 'color' => 'bg-orange-500', 'sub' => 'Pending'],
        ['label' => 'Complete', 'value' => '1,240', 'color' => 'bg-emerald-500', 'sub' => 'Successfully'],
        ['label' => 'Waiting', 'value' => '18', 'color' => 'bg-amber-400', 'sub' => 'Awaiting'],
    ];

    foreach ($stats as $stat): ?>
        <div class="<?= $stat['color']; ?> p-6 rounded-2xl text-white shadow-lg hover:shadow-2xl transition duration-300">
            <p class="text-white/80 text-xs uppercase font-black tracking-wider"><?= $stat['label']; ?></p>
            <h3 class="text-4xl font-bold mt-2"><?= $stat['value']; ?></h3>
            <p class="text-xs mt-3 text-white/70 italic"><?= $stat['sub']; ?></p>
        </div>
    <?php endforeach; ?>
</div>