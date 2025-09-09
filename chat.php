<?php
// api/chat.php

header("Content-Type: application/json");

$input = json_decode(file_get_contents("php://input"), true);
$userMessage = $input["message"] ?? "";

if (!$userMessage) {
  echo json_encode(["reply" => "⚠️ Pesan kosong"]);
  exit;
}

$apiKey = getenv("GEMINI_API_KEY") ?: "AIzaSyDSXxBdCDZLOkMkpnUfs28K6gStfT1igTw";
$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key=$apiKey";

$payload = [
  "contents" => [
    ["parts" => [["text" => $userMessage]]]
  ]
];

$options = [
  "http" => [
    "header" => "Content-Type: application/json\r\n",
    "method" => "POST",
    "content" => json_encode($payload),
  ],
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
  echo json_encode(["reply" => "⚠️ Gagal koneksi ke Gemini API."]);
  exit;
}

$data = json_decode($response, true);
$reply = $data["candidates"][0]["content"]["parts"][0]["text"] ?? "⚠️ Tidak ada jawaban dari AI.";

echo json_encode(["reply" => $reply]);
