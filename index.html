<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xiaowu AI Chat</title>
  <style>
    :root {
      --primary: #6c63ff;
      --primary-dark: #4a3fd9;
      --bg: #f4f6fb;
      --bot-bg: #fff;
      --user-bg: var(--primary);
    }
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: var(--bg);
      display: flex;
      flex-direction: column;
      height: 100vh;
    }
    header {
      background: var(--primary);
      color: white;
      text-align: center;
      padding: 15px;
      font-weight: bold;
      font-size: 18px;
      position: sticky;
      top: 0;
      z-index: 10;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    #chat {
      flex: 1;
      padding: 15px;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .msg {
      max-width: 75%;
      padding: 12px 15px;
      border-radius: 18px;
      line-height: 1.4;
      word-wrap: break-word;
      font-size: 15px;
    }
    .bot {
      align-self: flex-start;
      background: var(--bot-bg);
      color: #333;
      border-top-left-radius: 5px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    }
    .user {
      align-self: flex-end;
      background: var(--user-bg);
      color: #fff;
      border-top-right-radius: 5px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.15);
    }
    #input-area {
      display: flex;
      padding: 10px;
      background: white;
      border-top: 1px solid #ddd;
    }
    #message {
      flex: 1;
      padding: 12px 15px;
      border: 1px solid #ccc;
      border-radius: 20px;
      outline: none;
      font-size: 15px;
    }
    #send {
      background: var(--primary);
      color: white;
      border: none;
      padding: 0 18px;
      margin-left: 8px;
      border-radius: 20px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.2s;
    }
    #send:hover { background: var(--primary-dark); }
    @media (max-width: 600px) {
      header { font-size: 16px; padding: 12px; }
      .msg { font-size: 14px; max-width: 85%; }
      #message { font-size: 14px; }
      #send { font-size: 14px; padding: 0 14px; }
    }
  </style>
</head>
<body>
  <header>🤖 AI Xiaowu Chat</header>
  <div id="chat">
    <div class="msg bot">Hallo disini dengan AI Xiaowu ✨ apa yang bisa aku bantu?</div>
  </div>
  <div id="input-area">
    <input id="message" type="text" placeholder="Ketik pesan..." />
    <button id="send">Kirim</button>
  </div>

  <script>
    const chat = document.getElementById("chat");
    const input = document.getElementById("message");
    const sendBtn = document.getElementById("send");

    function addMessage(text, sender) {
      const div = document.createElement("div");
      div.classList.add("msg", sender);
      div.innerText = text;
      chat.appendChild(div);
      chat.scrollTop = chat.scrollHeight;
    }

    async function sendMessage() {
      const text = input.value.trim();
      if (!text) return;
      addMessage(text, "user");
      input.value = "";

      try {
        const res = await fetch("/api/chat", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ message: text })
        });
        const data = await res.json();
        addMessage(data.reply, "bot");
      } catch (err) {
        addMessage("⚠️ Error koneksi ke server.", "bot");
      }
    }

    sendBtn.onclick = sendMessage;
    input.addEventListener("keypress", e => {
      if (e.key === "Enter") sendMessage();
    });
  </script>
</body>
</html>
