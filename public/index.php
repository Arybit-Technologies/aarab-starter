<?php
// Simple AARAB demo frontend
$response = '';
$question = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question = trim($_POST['question'] ?? '');
    if ($question) {
        $prompt = "You are Veritas, a fact-checking and validation specialist. Answer the following research question concisely and accurately:\n\n$question";

        $ch = curl_init('http://ollama:11434/api/generate');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            'model' => 'llama3.1:70b-q4_K_M',
            'prompt' => $prompt,
            'stream' => false,
            'temperature' => 0.2
        ]));

        $raw = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($raw, true);
        $response = $data['response'] ?? 'Error: no response from model';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AARAB Starter Demo</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 800px; margin: 40px auto; padding: 20px; }
        textarea { width: 100%; height: 120px; padding: 12px; font-size: 16px; }
        button { padding: 12px 24px; font-size: 16px; background: #0066ff; color: white; border: none; border-radius: 6px; cursor: pointer; }
        pre { background: #f5f5f5; padding: 16px; border-radius: 6px; overflow-x: auto; }
    </style>
</head>
<body>
    <h1>AARAB Starter Demo</h1>
    <p>Run a 70B-class model offline using Ollama</p>

    <form method="POST">
        <textarea name="question" placeholder="Ask a research question... e.g., 'What are the top renewable energy trends in East Africa 2025?'"></textarea>
        <br><br>
        <button type="submit">Research with Veritas</button>
    </form>

    <?php if ($response): ?>
        <h3>Response:</h3>
        <pre><?= htmlspecialchars($response) ?></pre>
    <?php endif; ?>
</body>
</html>
