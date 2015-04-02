require "sinatra"
require "sinatra/activerecord"
require "shotgun"


get '/index' do
	erb :index
end

post '/result' do
	erb :result
end